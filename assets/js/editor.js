console.log('working');

document.addEventListener("keydown", (event) => {
    const selection = document.querySelector("iframe").contentWindow.getSelection();
    const selectedText = selection.toString();
    if(event.key === "H" && event.shiftKey === true && event.ctrlKey === true){
        const formData = new FormData();
        formData.append('action', 'check_selected_text');
        formData.append('selected_text', selectedText)

        fetch(ajaxData.ajaxurl, {
            method: 'POST',
            body: formData
        })
        // convert response to json
        .then( response => response.json())
        // receives json data and uses it
        .then( data => {
            console.log('json response: ', data);
        })
        .catch ( error => {
            console.error('Error: ', error);
        })
    }
})


