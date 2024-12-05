document.addEventListener('DOMContentLoaded', () => {
    const horseTransition = document.getElementById('horse-transition');
    const pageContent = document.getElementById('content');
    const fillContent = document.getElementById('fill');
    const headerContent = document.getElementsByTagName('header')[0];
    headerContent.style.setProperty('display', 'none', 'important');
    document.body.parentNode.style.overflowY = "hidden";
    setTimeout(() => {
        horseTransition.style.display = 'none'; 
        pageContent.classList.add('show');
        headerContent.classList.add('show');
        headerContent.style.setProperty('display', 'flex');
        fillContent.classList.add('hide');
        document.body.parentNode.style.overflowY = "auto";
    }, 2500);
});