// FORM
const formTicket = document.querySelector(".form__ticket");
const formTicketTitle = formTicket.querySelector(".form__ticket__name");
const formTicketDesc = formTicket.querySelector(".form__ticket__desc");
const formTicketBtn = formTicket.querySelector(".form__ticket__btn");
// TABLE
const TicketTable = document.querySelector(".ticket__table");
const TicketTableBody = TicketTable.querySelector(".ticket__table__body");

// console.log(formTicket);
// console.log(formTicketName);
// console.log(formTicketDesc);
// console.log(formTicketBtn);

// SEND AJAX FORM
function setTicket(e) {
    e.preventDefault();

    let title = formTicketTitle.value;
    let description = formTicketDesc.value;
    
    let ajax = new XMLHttpRequest();
    let params = `title=${title}&description=${description}&funcao=setTicket`;

    ajax.open("POST", "assets/php/ajax.php");
    // HEADER 
    ajax.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    ajax.onreadystatechange = () => {
        if(ajax.readyState === 4 && ajax.status === 200){
            // console.log(ajax.responseText);
            let ajaxReturn = JSON.parse(ajax.responseText);
            //console.log(data);
            TicketTableBody.innerHTML += ajaxReturn.data;
            alert(ajaxReturn.message);
        } else {
            //console.log(ajax.responseText);
        }
    };
    // SEND PARAMETERS TO PHP
    ajax.send(params);
}



formTicket.addEventListener('submit', setTicket, false);