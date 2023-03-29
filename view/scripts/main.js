let currentUsers = 1;
const clickMenu = document.querySelector(".clickMenu");

function addClickEvent(element) {
    element.addEventListener("click", e => {
        let position = element.getBoundingClientRect();
        let x = position.left + ((position.right - position.left) / 2);
        let y = position.top + ((position.bottom - position.top) / 2);
        clickMenu.style.left = `${x}px`;
        clickMenu.style.top = `${y}px`;
        clickMenu.style.visibility = "visible";
        element.classList.add("clicked");
    });
    return;
}

function hideMenu() {
    let element = document.querySelector(".clicked");
    clickMenu.style.visibility = "hidden";
    element.classList.remove("clicked");
    addClickEvent(element);
    return;
} 

function addEventToList (list) {
    list.forEach((element) => {
        if (!element.classList.contains("openHours") && !element.classList.contains("users")) {
            addClickEvent(element);
        }
    });
    return;
}

let scheduleItems = document.querySelectorAll(".scheduleItems");
if (clickMenu) {
    addEventToList(scheduleItems);
}

function changeItem(buttonNum) {
    let currentItem = document.querySelector(".clicked");
    if (currentItem == null) {
        return;
    }

    switch(buttonNum) {
        case 1: insertItem1(currentItem);
                break;
        case 2: insertItem2(currentItem);
                break;
        case 3: insertItem3(currentItem);
                break;
        case 4: insertItem4(currentItem);
                break;
        case 5: insertItem5(currentItem);
                break;
        case 6: insertItem6(currentItem);
                break;
        case 7: deleteItem(currentItem);
                break;
        default:break;
    }

    hideMenu();
    return;
}

// Inserts and Deletes for Schedule Items

function hasItem(element) {
    if (element.hasChildNodes()) {
        return true;
    } else {
        return false;
    }
}

function insertItem1(element) {
    deleteItem(element);
    let html = "<div class='shiftSlots desk1'><p>Desk 1</p></div>";
    element.insertAdjacentHTML("beforeend", html);
    return;
}

function insertItem2(element) {
    deleteItem(element);
    let html = "<div class='shiftSlots desk2'><p>Desk 2</p></div>";
    element.insertAdjacentHTML("beforeend", html);
    return;
}

function insertItem3(element) {
    deleteItem(element);
    let html = "<div class='shiftSlots desk3'><p>Desk 3</p></div>";
    element.insertAdjacentHTML("beforeend", html);
    return;
}

function insertItem4(element) {
    deleteItem(element);
    let html = "<div class='shiftSlots offDesk'><p>Off Desk</p></div>";
    element.insertAdjacentHTML("beforeend", html);
    return;
}

function insertItem5(element) {
    deleteItem(element);
    let html = "<div class='shiftSlots meeting'><p>Meeting</p></div>";
    element.insertAdjacentHTML("beforeend", html);
    return;
}

function insertItem6(element) {
    deleteItem(element);
    let html = "<div class='shiftSlots lunch'><p>Lunch</p></div>";
    element.insertAdjacentHTML("beforeend", html);
    return;
}

function deleteItem(element) {
    if (hasItem(element)) {
        while (element.hasChildNodes()) {
            element.removeChild(element.firstChild);
        }
    }
    return;
}


function addUser() {
    let element = document.querySelector(".schedule");
    let html = `    <div class='scheduleItems users'>User ${++currentUsers}</div>
                    <div class='scheduleItems'></div>
                    <div class='scheduleItems'></div>
                    <div class='scheduleItems'></div>
                    <div class='scheduleItems'></div>
                    <div class='scheduleItems'></div>
                    <div class='scheduleItems'></div>
                    <div class='scheduleItems'></div>
                    <div class='scheduleItems'></div>
                    <div class='scheduleItems'></div>
                    <div class='scheduleItems'></div>
                    <div class='scheduleItems'></div>
                    <div class='scheduleItems'></div>
                    <div class='scheduleItems'></div>`;
    element.insertAdjacentHTML("beforeend", html);
    let scheduleItems = document.querySelectorAll(".scheduleItems");
    addEventToList(scheduleItems);
    return;
}

function deleteUser() {
    if (currentUsers <= 0) {
        return;
    }

    let element = document.querySelector(".schedule");
    for (let i = 0; i < 28; i++) {
        element.removeChild(element.lastChild);
    }
    --currentUsers;
    return;
}