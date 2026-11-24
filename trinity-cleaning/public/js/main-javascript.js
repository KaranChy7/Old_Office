const toggles = document.querySelectorAll('.faq-block .question .icon');
toggles.forEach(toggle => {
    toggle.addEventListener('click', () => {
        // // if use toggle 
        // toggle.closest('question').classList.toggle('active');

        // //add active class and remove from faq-block 
        // const question = toggle.closest('.faq-block');
        // if (question.classList.contains('active')) {
        //     question.classList.remove('active');
        // } else {
        //     question.classList.add('active');
        // }

        document.querySelectorAll('.faq-block').forEach(faqBlock => {
            faqBlock.classList.remove('active');
        });
        const currentFaqBlock = toggle.closest('.faq-block');
        currentFaqBlock.classList.add('active');

    })
})