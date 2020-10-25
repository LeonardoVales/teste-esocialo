$(document).ready(function () {

    $(".delete-link").click(function (e) {

        e.preventDefault();

        let link = $(this).attr("href");

        Swal.fire({
            title: "Deseja realmente excluir o contato?",
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


    if (document.getElementById('alert'))  {

        setTimeout(() => {
            $("#alert").hide('slow')
        }, 3000);
    }

    $(".telefone").inputmask({
        mask: '(99) 99999-9999',
        keepStatic: true
    });

    $(".email").inputmask({
        mask: "*{1,30}[.*{1,30}][.*{1,30}][.*{1,30}]@*{1,30}[.*{2,9}][.*{1,9}]",
        greedy: false,
        onBeforePaste: function (pastedValue, opts) {
            pastedValue = pastedValue.toLowerCase();
            return pastedValue.replace("mailto:", "");
        },
        definitions: {
            '*': {
                validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~\-]",
                casing: "lower"
            }
        }
    });


});


function checkFileSize(sizeInBytes) {

    const k = 1024;
    const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
    const i = Math.floor(Math.log(sizeInBytes) / Math.log(k));

    const sizeValue = parseFloat((sizeInBytes / Math.pow(k, i)).toFixed(2));
    const size = sizes[i];

    return { sizeValue, size };

}

function checkValidFile()
{
    const input_file = document.getElementById('arquivo');

    if (input_file.value !== '') {
        const file_size = document.getElementById('arquivo').files[0].size;
        const resultFileSize = checkFileSize(file_size);

        //Retirei apenas o KB do array, se for qualquer um desses valores, o usário deve ser barrado
        const sizes = ['Bytes', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];

        if (sizes.includes(resultFileSize.size) || resultFileSize.sizeValue > 500.00) {
            input_file.value = '';
            Swal.fire(
                'Atenção',
                'O tamanho máximo do arquivo deve ser 500 KB.',
                'warning'
            );
        }
    }

    if (input_file.value !== '') {

        const extensionFile = input_file.value.split('.')[1];
        const extensios = ['pdf', 'doc', 'docx', 'odt', 'txt'];

        if (!extensios.includes(extensionFile)) {
            input_file.value = '';
            Swal.fire(
                'Atenção',
                'O arquivo anexo deve conter a extensão PDF, DOC, DOCX, ODT, ou TXT',
                'warning'
            )
        }
    }

}

function validarEmail (email) {

    if (email.value !== '') {
        const validEmail =  /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;

        if (!validEmail.test(email.value)) {

            email.value = '';
            email.focus();
            Swal.fire(
                'Atenção',
                'O e-mail informado não é válido',
                'warning'
            );
        }

    }

}

