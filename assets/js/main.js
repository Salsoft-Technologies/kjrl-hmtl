jQuery(window).scroll(function (event) {
    var scroll = jQuery(window).scrollTop();
    if (scroll > 200) {
        jQuery('header').addClass('position-relative');
        jQuery('header').removeClass('position-fixed');
    } else {
        jQuery('header').removeClass('position-relative');
        jQuery('header').addClass('position-fixed');
    }
});


jQuery('#addFeild').click(function () {
    var cloneBox = jQuery(this).parents('.form-group').clone();
    cloneBox.find('#addFeild').remove();
    var getLenght = jQuery('.active .form-group').length;
    if (getLenght < 3) {
        jQuery(this).parents('.step-form').append(cloneBox);
    }

})

const list = Array.from(document.querySelectorAll('.step-form'));
const listLength = list.length;

let active = document.querySelector('.step-form.active');
let step = list.indexOf(active) + 1;


const develop = document.getElementById('develop')
develop.addEventListener('click', developFlow)


/*---- Develop Flow -----*/
function developFlow() {
    const pyramidGreets = document.querySelector('.parimid-greets')
    const pyramidFlow = document.querySelector('.pyrimid-flow')

    pyramidGreets.style.display = 'none';
    pyramidFlow.style.display = 'block';
    document.querySelector('.submitButton').style.display = 'none';

    updatePyramid(step)
}


/*---- Proceed Button -----*/
let proceedButton = document.querySelector('.proceedButton');
if (typeof (proceedButton) != 'undefined') {
    proceedButton.addEventListener('click', function () {
        proceedBtn();
    })
}

function proceedBtn() {
    
    if (step < listLength && step >= 1) {
        step = ++step;
        updatePyramid(step);
        console.log(step);
        if(step >= listLength) {
            document.querySelector('.submitButton').style.display = 'block';
        }
    }

    // Else Call Function to Active First Step
}



/*---- Cancel Button -----*/
let cancelButton = document.querySelector('.cancelButton');
if (typeof (cancelButton) != 'undefined') {
    cancelButton.addEventListener('click', function () {
        cancelBtn();
    })
}

function cancelBtn() {
    
    if (step <= listLength && step > 1 ) {
        step = --step;
        updatePyramid(step)
        console.log(step);
    } 

}   



    /*---- Update Pyramid -----*/
    function updatePyramid(step) {
        let activeStep = document.querySelector('.active-steps');
        let totalStep = document.querySelector('.total-steps');
        let activeBar = document.querySelector('.activeBar');
        let barWidth = (100 / listLength) * step;

        activeStep.innerText = step;
        totalStep.innerText = listLength;
        activeBar.style.width = `${barWidth}%`;

        active = document.querySelector('.step-form.active');
        active.classList.remove('active');
        list[step - 1].classList.add('active');
        if(step < listLength) {
            document.querySelector('.submitButton').style.display = 'block';
        } else {
            document.querySelector('.submitButton').style.display = 'none';
        }
    } 