const statusSelector = document.querySelectorAll('button[data-status]')

document.addEventListener("click", function (element) {

    console.log(element.target)
    if (element.target.dataset.status) {

        let status = element.target.dataset.status;

        fetch('/ajax/get-messages.php?status=' + status)
            .then((response) => response.text())
            .then((data) => {
                document.getElementById('messages').innerHTML = data;
            })

        statusSelector.forEach(button => {
            button.classList.remove('bg-neutral-200', 'text-neutral-800')
        })

        element.target.classList.add('bg-neutral-200', 'text-neutral-800')

    }
})