document.addEventListener('DOMContentLoaded', function () {
        const dataRetiradaInput = document.getElementById('data_retirada');
        const dataDevolucaoInput = document.getElementById('data_devolucao');
        const multaInput = document.getElementById('multa');
        const atrasoInput = document.getElementById('atraso');
        const multaPct = document.getElementById('multaPct');

        function calcularMulta() {
            const dataRetirada = new Date(dataRetiradaInput.value);
            const dataDevolucao = new Date(dataDevolucaoInput.value);
            const taxaMultaPorDia = multaPct.value; 

            if (dataDevolucao && dataRetirada) {
                
                const diffTime = dataDevolucao - dataRetirada;
                const diffDays = diffTime / (1000 * 60 * 60 * 24);
               
                if (diffDays > 0) {
                    multaInput.value = (diffDays * taxaMultaPorDia).toFixed(2);
                    atrasoInput.value = diffDays; 
                } else {
                    multaInput.value = 0;
                    atrasoInput.value = 0; 
                }
            } else {
                multaInput.value = ''; 
            }
        }

        dataRetiradaInput.addEventListener('change', calcularMulta);
        dataDevolucaoInput.addEventListener('change', calcularMulta);
    });