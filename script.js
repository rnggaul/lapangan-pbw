const bookingForm = document.getElementById("booking");

bookingForm.addEventListener("sbumit", function(e){
    e.preventDefault();

    const url = e.target.action;
    const bookingData = new bookingData(bookingForm);

    fetch(url, {
        method: "POST",
        body: bookingData,
        mode: "no-cors",
    }).then(() => {
        thanks.php
    }).catch((e) => alert('Error occured'))
});