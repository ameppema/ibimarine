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
function ToggleModal(ModalName, Params = null){
    let onOpen = null;
    let onClose = null;
    let closeOnClickOut = null;
    let restart = null;
    if(Params !== 'undefined' && Params !== null){
        onOpen = Params.hasOwnProperty('onOpen') ? Params.onOpen : null;
        onClose = Params.hasOwnProperty('onClose') ? Params.onClose : null;
        closeOnClickOut = Params.hasOwnProperty('closeOnClickOut') ? Params.closeOnClickOut : null;
        restart = Params.hasOwnProperty('restart') ? true : null;
    }
    const OpenModal = document.querySelectorAll('[data-open-modal="'+ModalName+'"]');
    const CloseModal = document.querySelector('[data-close-modal="'+ModalName+'"]');
    const Modal = document.querySelector('[data-target-modal="'+ModalName+'"]');

    CloseModal.onclick = function(){
        if(isFunction(onClose)) onClose(this);
        Close();
    }
    OpenModal.forEach( button => {
        button.onclick  = function(){
            if(isFunction(onOpen)) onOpen(this);
            if(closeOnClickOut){
            Modal.addEventListener('click', function(e){
                const quit = !getElementById(closeOnClickOut).contains(e.target) ? Close() : null;
            });}
            document.body.style.overflowY = 'hidden';
            Modal.style.display = 'block';
            Modal.style.overflowY = 'scroll';
        }
    });

    function Close(){
        document.body.style.overflowY = 'scroll';
        Modal.style.display = 'none'
        Modal.style.overflowY = 'hidden';
    }

    if(restart) Close();
}

/* Forms */

function makeImageCard({image_src, image_alt, id,sort_order}){
    return `
      <img src="/storage/${image_src}" alt="${image_alt}" class="w-36 h-24 object-cover">
      <div class="flex items-center justify-center gap-2 ">
        <p class="text-[#343a40] font-bold ">#${sort_order}</p>
        <button id="image_${id}" type="button" data-open-modal="upload-image-modal"><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
        <button class=""><i
            class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
      </div>
    `
}

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

function getElementById(ID){
    return document.getElementById(ID);
}

/* General Helpers */
function isFunction(func){
    return typeof func === 'function';
}