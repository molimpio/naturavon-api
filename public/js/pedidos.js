function dataPagamento(pedidoId, urlBase) {
    const data = prompt("Digite a data de vencimento", "DD-MM-YYYY");
     
    if (data != null && data != "") {
        const regex = /^[0-9]{2}[-][0-9]{2}[-][0-9]{4}$/g;
        if (regex.test(data)) {
            const url = `${urlBase}/gerarRelatorio/${pedidoId}/${data}`;
            window.open(url, '_blank')        
        } else {
            alert('Data está inválida, deve estar no formato DD-MM-YYYY')
        }
    }
}