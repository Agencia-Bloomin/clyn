//============================================Go to the top==============================================
async function runGoTop() {
    var goTopDomLoaded = await document.addEventListener('DOMContentLoaded', () => {
        const goTopBtn = document.querySelector('.go-top-btn');

        if (goTopBtn) {

            function checkHeight() {
                if (window.scrollY > 200) {
                    goTopBtn.style.display = "block";
                } else {
                    goTopBtn.style.display = "none";
                }
            }

            window.addEventListener('scroll', checkHeight);

            goTopBtn.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                })
            })
        }
    })
} runGoTop();

// ========== BTN Leia Mais =========
const readMore = document.querySelector('.read-more')
const buttons = document.querySelector('.buttons')
const hidden = document.querySelector('.hidden')

if (readMore) {
    readMore.addEventListener('click', function () {
        buttons.classList.add('d-none')
        hidden.classList.add('active')
    })
}


//====================================== WhatsApp BTN Form ==========================================

    /* configuração:
    adicionar no botão whatsapp do formulário: id="meuZap" data-zap="<?=CONF_SITE_WHATSAPP_LINK?>"
    */
    const meuZap = document.getElementById('meuZap');
    if (meuZap) {
        meuZap.addEventListener('click', function () {
            const whatsappNumber = this.getAttribute('data-zap');
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const subject = document.getElementById('subject').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const message = document.getElementById('message').value.trim();
    
            // Verificação de campos vazios
            if (!name || !email || !subject || !phone || !message) {
                alert('Por favor, preencha todos os campos antes de enviar.');
                return;
            }
    
            var text = `Nome: ${name}` +
                `E-mail: ${email}` +
                `Telefone: ${phone}` +
                `Assunto: ${subject}` +
                `Mensagem: ${message}`;
    
            var whatsappLink = `${whatsappNumber}?text=${encodeURIComponent(text)}`;
    
            // Verificação de URL para garantir que o número está no formato correto
            if (/^https:\/\/wa.me\/\d+\?text=/.test(whatsappLink)) {
                window.open(whatsappLink, '_blank');
            } else {
                alert('Número de telefone inválido.');
            }
        });
}
    // ================= Fim WhatsApp BTN Form =========================


    // ========= accordion =========
 function runAccordion() {
    const accordionDomLoaded = document.addEventListener('DOMContentLoaded', () => {

        const accordionExist = document.querySelector('.accordion')

        if (accordionExist) {
            const items = document.querySelectorAll(".accordion button");
            function toggleAccordion() {
                const itemToggle = this.getAttribute('aria-expanded');

                for (i = 0; i < items.length; i++) {
                    items[i].setAttribute('aria-expanded', 'false');
                }

                if (itemToggle == 'false') {
                    this.setAttribute('aria-expanded', 'true');
                }
            }
            items.forEach(item => item.addEventListener('click', toggleAccordion));
        }

    })
} runAccordion();



   // ======= btn expande textos =======
   document.addEventListener("DOMContentLoaded", function() {
    const expandButtons = document.querySelectorAll(".btn-expand");
  
    expandButtons.forEach(button => {
      button.addEventListener("click", function() {
        const boxExpand = button.previousElementSibling;
        const textBtn = button.querySelector("span");
        const icon = button.querySelector("i");
  
        if (boxExpand.classList.contains("expanded")) {
          textBtn.textContent = "Leia Mais";
          icon.style.transform = "rotate(0deg)";
          boxExpand.classList.remove("expanded");
          boxExpand.style.maxHeight = "200px"; // Altura inicial alterar também no CSS
        } else {
          textBtn.textContent = "Leia Menos";
          icon.style.transform = "rotate(180deg)";
          boxExpand.style.maxHeight = boxExpand.scrollHeight + "px"; // Altura dinâmica
          boxExpand.classList.add("expanded");
        }
      });
    });
   });
  



   // ========== Leia Mais BTN interna 2 =========
   document.addEventListener("DOMContentLoaded", function() {
    var buttons = document.querySelectorAll(".toggleButton");

    buttons.forEach(function(button) {
        button.addEventListener("click", function() {
            var targetId = this.getAttribute('data-target');
            var moreText = document.getElementById(targetId);

            if (moreText.style.display === "none" || moreText.style.display === "") {
                moreText.style.display = "block";
                this.innerHTML = "Leia menos";
            } else {
                moreText.style.display = "none";
                this.innerHTML = "Leia mais";
            }
        });
    });
});



      
// ========== JS services Tabs =========
const tabList = document.getElementById('myTab');
const tabContent = document.querySelector('.tab-content');

if (tabList) {

tabList.addEventListener('click', handleTabClick);

function handleTabClick(event) {
  // Check if clicked element is a tab
  if (!event.target.classList.contains('nav-link')) return;

  // Get the clicked tab element
  const clickedTab = event.target;

  // Remove active class from all tabs and content panels
  const tabs = tabList.querySelectorAll('.nav-link');
  const contentPanels = tabContent.querySelectorAll('.tab-pane');
  tabs.forEach(tab => tab.classList.remove('active'));
  contentPanels.forEach(panel => panel.classList.remove('active'));

  // Add active class to the clicked tab and its corresponding content panel
  clickedTab.classList.add('active');
  const clickedTabId = clickedTab.id.replace('tabs', 'tab');
  document.getElementById(clickedTabId).classList.add('active');
}
};




// ========= scroll reveal =========
ScrollReveal({ reset: true });
ScrollReveal().reveal(".fade-in", {
    duration: 1500,
    delay: 200,
    move: 0,
});
  
ScrollReveal().reveal(".slide-left", {
    duration: 1000,
    origin: "left",
    distance: "300px",
    easing: "ease-in-out"
});
  
ScrollReveal().reveal(".slide-right", {
    duration: 1000,
    origin: "right",
    distance: "300px",
    easing: "ease-in-out"
});
  
ScrollReveal().reveal(".slide-up", {
    duration: 1000,
    origin: "bottom",
    distance: "100px",
    easing: "cubic-bezier(.37,.01,.74,1)",
    opacity: 0.2,
    scale: 0.8
  });
  


// fancybox
  Fancybox.bind("[data-fancybox]", {
    // Your custom options
  });