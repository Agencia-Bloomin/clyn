async function runPopup() {
  const popupDomLoaded = document.addEventListener('DOMContentLoaded', () => {

    const containerModal = document.querySelector('[data-modal="container"]')
    if (containerModal) {
      const botaoFechar = document.querySelector('[data-modal="fechar"]')

      function fecharModal(e) {
        e.preventDefault();
        containerModal.classList.remove("ativo")
      }

      function cliqueForaModal(e) {
        if (e.target === this) {
          fecharModal(e);
        }
      }

      botaoFechar.addEventListener('click', fecharModal)
      containerModal.addEventListener('click', cliqueForaModal)
    }

  })
} runPopup()