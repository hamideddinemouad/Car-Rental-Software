let nameIcon = document.querySelectorAll("span img");
nameIcon.forEach(icon => icon.addEventListener("click", ()=>
{
    let idContainingDiv = icon.parentElement.parentElement.id;
    let elementsToShow = document.querySelectorAll(`#${idContainingDiv} .to-hide`);
    console.log(`#${idContainingDiv} .to-hide`);
    // console.log(elementsToShow);
    // elementsToShow.forEach(elem => console.log(elem));
}))
function renderModal()
{
}