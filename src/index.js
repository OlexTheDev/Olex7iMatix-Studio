function update() {
    var today = new Date()

    var year = today.getFullYear()

    var month = today.getMonth() + 1

    var day = today.getDay()

    var hour = today.getHours()

    var minute = today.getMinutes()

    var second = today.getSeconds()

    var fullDate = day + "/" + month + "/" + year + " | " + hour + "." + minute + "." + second
    document.getElementById("clock").innerHTML = '<span style="font-size: 18px;">' + fullDate + "</span>";

    setTimeout("update()", 1000)

}