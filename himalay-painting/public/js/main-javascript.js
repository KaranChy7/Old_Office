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

/* Scroll Animation */ 
const custom_animates = document.querySelectorAll('.custom-animation');
window.addEventListener('scroll', animateSections);
animateSections();
function animateSections() {
    const triggerBottom = window.innerHeight / 2;
    custom_animates.forEach(customAnimate => {
        const custom_animateTop = customAnimate.getBoundingClientRect().top;

        if (custom_animateTop < triggerBottom) {
            customAnimate.classList.add('show');
        } else {
            customAnimate.classList.remove('show');
        }
    })

}
