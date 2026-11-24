(() => {
  const csrf = document.querySelector('meta[name="csrf-token"]')?.content || document.querySelector('input[name="csrf"]')?.value || sessionStorage.getItem('csrf') || '';
  if (csrf) sessionStorage.setItem('csrf', csrf);

  const toast = (message) => {
    const old = document.querySelector('.toast');
    if (old) old.remove();
    const el = document.createElement('div');
    el.className = 'toast';
    el.textContent = message;
    document.body.appendChild(el);
    setTimeout(() => el.remove(), 2600);
  };

  const post = async (action, data) => {
    const body = new FormData();
    body.append('action', action);
    Object.entries(data).forEach(([key, value]) => body.append(key, value));
    const response = await fetch('api.php', {
      method: 'POST',
      headers: {'X-CSRF-Token': sessionStorage.getItem('csrf') || ''},
      body
    });
    const json = await response.json();
    if (!response.ok) throw new Error(json.error || 'Request failed');
    return json;
  };

  document.addEventListener('click', async (event) => {
    const add = event.target.closest('.add-to-cart');
    if (add) {
      event.preventDefault();
      const selector = add.dataset.quantityInput;
      const quantity = selector ? (document.querySelector(selector)?.value || 1) : 1;
      try {
        const result = await post('cart_add', {product_id: add.dataset.productId, quantity});
        document.querySelectorAll('#cart-count').forEach(el => el.textContent = result.cart_count);
        toast(result.message);
      } catch (error) { toast(error.message); }
      return;
    }

    const buy = event.target.closest('.buy-now');
    if (buy) {
      event.preventDefault();
      try {
        await post('cart_add', {product_id: buy.dataset.productId, quantity: 1});
        window.location.href = 'index.php?page=checkout';
      } catch (error) { toast(error.message); }
      return;
    }

    const remove = event.target.closest('.remove-cart');
    if (remove) {
      event.preventDefault();
      try {
        await post('cart_remove', {product_id: remove.dataset.productId});
        window.location.reload();
      } catch (error) { toast(error.message); }
      return;
    }

    const wish = event.target.closest('.wishlist-toggle');
    if (wish) {
      event.preventDefault();
      try {
        const result = await post('wishlist_toggle', {product_id: wish.dataset.productId});
        document.querySelectorAll(`[data-product-id="${wish.dataset.productId}"].wishlist-toggle`).forEach(el => el.classList.toggle('active', result.active));
        document.querySelectorAll('#wishlist-count').forEach(el => el.textContent = result.wishlist_count);
        toast(result.active ? 'Saved to wishlist.' : 'Removed from wishlist.');
      } catch (error) { toast(error.message); }
    }
  });

  const menu = document.querySelector('.menu-toggle');
  menu?.addEventListener('click', () => document.querySelector('.header-row')?.classList.toggle('nav-open'));

  const search = document.querySelector('#site-search');
  const suggestions = document.querySelector('#search-suggestions');
  let searchTimer;
  search?.addEventListener('input', () => {
    clearTimeout(searchTimer);
    const query = search.value.trim();
    if (query.length < 2) { suggestions?.classList.remove('open'); return; }
    searchTimer = setTimeout(async () => {
      const response = await fetch(`api.php?action=search&q=${encodeURIComponent(query)}`);
      const data = await response.json();
      suggestions.innerHTML = data.results.length ? data.results.map(item => `
        <a class="suggestion-item" href="${item.url}">
          <img src="${item.image}" alt="">
          <span><strong>${item.name}</strong><small>${item.botanical} · ${item.price} · ${item.stock > 0 ? 'In stock' : 'Out of stock'}</small></span>
        </a>`).join('') : '<div class="suggestion-item">No matching products</div>';
      suggestions.classList.add('open');
    }, 220);
  });
  search?.addEventListener('keydown', (event) => {
    if (event.key === 'Enter') window.location.href = `index.php?page=shop&q=${encodeURIComponent(search.value)}`;
  });
  document.addEventListener('click', event => {
    if (!event.target.closest('.search-wrap')) suggestions?.classList.remove('open');
  });
  document.querySelector('[data-focus-search]')?.addEventListener('click', () => {
    search?.focus();
    window.scrollTo({top: 0, behavior: 'smooth'});
  });

  document.querySelectorAll('.tabs button').forEach(button => button.addEventListener('click', () => {
    document.querySelectorAll('.tabs button').forEach(el => el.classList.remove('active'));
    document.querySelectorAll('.tab-panel').forEach(el => el.classList.remove('active'));
    button.classList.add('active');
    document.querySelector(`#${button.dataset.tab}`)?.classList.add('active');
  }));

  const observer = new IntersectionObserver(entries => entries.forEach(entry => {
    if (entry.isIntersecting) entry.target.classList.add('visible');
  }), {threshold: .08});
  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  setTimeout(() => document.querySelectorAll('.flash').forEach(el => el.remove()), 4000);
})();
