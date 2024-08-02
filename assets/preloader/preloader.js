async function runPreloader() {

    const preloaderWindowLoaded = await window.addEventListener('load', function () {
        var preloaderContainer = document.getElementById('preloader-container');

        // Adiciona um atraso de 5 segundos antes de esconder o preloader
        setTimeout(function () {
            preloaderContainer.classList.add('hidden');
        }, 1000);
    });

} runPreloader()