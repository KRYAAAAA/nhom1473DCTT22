function hienthimp(){
    const rows = document.querySelectorAll("#hienthi tr");
    rows.forEach(row => {
        row.addEventListener("click", () => {
            const cells = row.cells;
            document.getElementById("txttimkiem").value = cells[3].textContent;
            document.getElementById("loaipm").value = cells[4].textContent;
        })
    })
}

