/* Accordions */
const accordions = document.querySelectorAll('[data-target-accordion]');

for(let i = 0; i < accordions.length; i++){
    accordions[i].addEventListener('click', function(e){
        const accordionBody = accordions[i].nextElementSibling;

        const accordion = accordionBody.style.maxHeight
                    ? accordionBody.style.maxHeight = null
                    : accordionBody.style.maxHeight = accordionBody.scrollHeight + 'px';
    
    })
}

/* Modals */
function ToggleModal(ModalName){
    const OpenModal = document.querySelectorAll('[data-open-modal="'+ModalName+'"]');
    const CloseModal = document.querySelector('[data-close-modal="'+ModalName+'"]');
    const Modal = document.querySelector('[data-target-modal="'+ModalName+'"]');

    CloseModal.onclick = function(){
        Modal.style.display = 'none'
    }
    OpenModal.forEach( button => {
        button.onclick  = function(){
            Modal.style.display = 'block';
        }
    });
}

/* Forms */

function setFormValue(formId, targetInput, value, targetLabel, instance){
    if(!instance) return;
    const form = document.getElementById(formId);
    const input  = document.querySelector('[data-target-accordion="'+targetInput+'"]');
    if(instance.classList.contains('disabled')) return null;
    input.nextElementSibling.style.maxHeight = null;
    if(form){
        form[targetInput].value = value;
    }
    if(targetLabel){
        if(form[targetInput].options){
            document.getElementById(targetLabel).textContent = form[targetInput].options[form[targetInput].selectedIndex].text;
            return true;
        }
        document.getElementById(targetLabel).textContent = form[targetInput].value;
    }
    return false;
}