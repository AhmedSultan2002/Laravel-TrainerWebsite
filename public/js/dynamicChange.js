let cur_target = null;
let Changebutton = document.getElementById("Change-Button");
let Resetbutton = document.getElementById("Reset-Button");
let message = document.getElementById("btn-message");

function setarget(event) {

        if (cur_target) {
            cur_target.classList.remove('selected');
        }
        
        message.style.display = "none";

        cur_target = event.currentTarget;
        cur_target.classList.add('selected');
        
        var title = cur_target.querySelector('h3');
        if (title) {
            var title_text = title.innerHTML;
            Changebutton.innerHTML = "Change " + title_text + " Style";
            Resetbutton.innerHTML = "Reset " + title_text + " Style";
        }

}

const selectableElements = document.querySelectorAll(".services-box.selectable");
selectableElements.forEach(element => {
    element.addEventListener('click', setarget);
});

function ChangeStyle() {
    if (cur_target) {
        cur_target.classList.add('custom');
    }
    else {
        message.style.display = "block";
    }
}

function ResetStyle() {
    if (cur_target) {
        cur_target.classList.remove('custom');
    }
    else {
        message.style.display = "block";
    }
}
