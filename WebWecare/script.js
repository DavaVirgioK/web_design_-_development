$(document).ready(function () {
    $("#submitData").click(function () {
        let elTextInput = $("#textinput")
        let elDataText = $(".datatext")

        let dataInput = elTextInput.val()
        let dataText = elDataText.val()

        if (dataInput === "" || typeof dataInput === "undefined" || dataText === "" || typeof dataText === "undefined") {
            alert("Harap masukkan kedua field dengna data")
            return
        }

        $("#result").append(
            `<div class="resultData"><h2 style="display: block ">${dataInput}</h2><p>${dataText}</p></div>`
        )
        elTextInput.val("")
        elDataText.val("")
    })
    $("#clear").click(function () {
        $("#result").html("")
    })
    
})

   