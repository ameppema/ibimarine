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

function setFormValueStatus(formTarget, inputTarget, value, inputLabelTarget){
    const values = {
        0: `                                
        <div class="w-3 mr-1">
            <svg class="text-[#ffba00]" style="width: 100%; height: auto; display: inline;" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <circle fill="currentcolor" cx="50" cy="50" r="50"/>
            </svg>
        </div>
        <p>Stand By</p>
        `,
        1: `
        <div class="w-3 mr-1">
            <svg class="text-[#0fd821]" style="width: 100%; height: auto; display: inline;" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <circle fill="currentcolor" cx="50" cy="50" r="50"/>
            </svg>
        </div>
        <p>Confirmada</p>
        `,
    };

    const form = document.getElementById(formTarget);
    const input  = document.querySelector('[data-target-accordion="'+inputTarget+'"]');
    input.nextElementSibling.style.maxHeight = null;
    if(form){
        form[inputTarget].value = value;
    }
    if(inputLabelTarget){
        document.getElementById(inputLabelTarget).innerHTML = values[value];
        console.log(form[inputTarget].value);
        return true;
    }

}