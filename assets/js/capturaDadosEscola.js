document.addEventListener('DOMContentLoaded', function () {
    // Captura o evento de abertura do modal
    const modalVisualizar = document.getElementById('janelaVisualizar');
    modalVisualizar.addEventListener('show.bs.modal', function (event) {
        // Botão que disparou o modal
        const button = event.relatedTarget;
        
        // Obtém os dados do botão
        const turmaId = button.getAttribute('data-id');
        const turmaNome = button.getAttribute('data-nome');
        const turmaTurno = button.getAttribute('data-turno');
        
        // Atualiza o conteúdo do modal
        const modalBody = modalVisualizar.querySelector('.modal-body');
        modalBody.innerHTML = `
            <p><strong>ID da Turma:</strong> ${turmaId}</p>
            <p><strong>Nome:</strong> ${turmaNome}</p>
            <p><strong>Endereço:</strong> ${turmaTurno}</p>
        `;
    });
});