let baseWage = 1000

let weekField = document.getElementById("weekField")

let monthField = document.getElementById("monthField")

let yearField = document.getElementById("yearField")

let calcHours = () => {
    let activeButtons = document.getElementsByClassName("calc-button-active")
    return(activeButtons[0].value * activeButtons[1].value)
}

let printWage = (wage) => {
    let millions = Math.round(wage/1000000)
    return `${(millions > 0)?millions:''} ${Math.round(wage/1000)} 000₽`
}

let calc = () => {
    let wage = baseWage * calcHours()
    weekField.innerText = printWage(wage)
    monthField.innerText = printWage(wage * 4)
    yearField.innerText = printWage(wage * 4 * 12)
}

$('.calc-button-1').click(function() {
    $('.calc-button-1').removeClass('calc-button-active')
    $(this).addClass('calc-button-active')
    calc()
});


$('.calc-button-2').click(function() {
    $('.calc-button-2').removeClass('calc-button-active')
    $(this).addClass('calc-button-active')
    calc()
});

calc()