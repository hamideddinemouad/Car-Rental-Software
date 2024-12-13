let nameIcon = document.querySelectorAll(".infospan");
nameIcon.forEach(icon => icon.addEventListener("click", ()=>
{
    let idContainingDiv = icon.parentElement.parentElement.parentElement.id;

    // console.log(idContainingDiv);
    let elementsToShow = document.querySelectorAll(`#${idContainingDiv} .to-hide`);
    // console.log(`#${idContainingDiv} .to-hide`);
    // console.log(elementsToShow);
    elementsToShow.forEach(elem =>
        {
            if (elem.style.display === "block")
            {
                elem.style.display = "none";
            }
            else
            {
                elem.style.display = "block";
            }
        });
}))
let plusCar = document.querySelector(".pluscars");
let plusClient = document.querySelector(".plusclients");
let plusContract = document.querySelector(".pluscontracts");
let content = document.querySelectorAll(".contracts, .clients, .cars");

plusCar.addEventListener("click", ()=>
{
    content.forEach(piece => piece.style.display = "none");
    document.querySelector(".car-form").style.display = "flex";
    document.querySelector("main").style.justifyContent = "center";
})

plusClient.addEventListener("click", ()=>
    {
        content.forEach(piece => piece.style.display = "none");
        document.querySelector(".client-form").style.display = "flex";
        document.querySelector("main").style.justifyContent = "center";
    })

plusContract.addEventListener("click", ()=>
    {
        content.forEach(piece => piece.style.display = "none");
        document.querySelector(".contract-form").style.display = "flex";
        document.querySelector("main").style.justifyContent = "center";
        // console.log(plusClient);
    })
let editclientform = document.querySelector("#editclientform");
let editbuttons = document.querySelectorAll(".editbuttonevent");
// console.log(editclientform);
// console.log(editbutton);
editbuttons.forEach(edit=> {
    edit.addEventListener("click", ()=>
        {
            if (edit.closest(".name-icon").nextElementSibling.querySelector("form").style.display === "flex")
            {
                edit.closest(".name-icon").nextElementSibling.querySelector("form").style.display = "none"
            }
            else
            {
                edit.closest(".name-icon").nextElementSibling.querySelector("form").style.display = "flex";
            }
        })
})

// console.log(editbutton);

