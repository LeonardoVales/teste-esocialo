$(document).ready(function () {

    $(".delete-link").click(function (e) {

        e.preventDefault();

        let link = $(this).attr("href");

        Swal.fire({
            title: "Deseja realmente excluir o registro?",
            text: "",
            type: "warning",
            confirmButtonText: "Sim",
            cancelButtonText: "Não",
            showCancelButton: true,
            confirmButtonColor: "#24d2b5"
        }).then((result) => {
            if (result.value) {
                window.location.href = link;
            }
        });
    });

});
