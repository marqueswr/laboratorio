<x-app-layout>

    
    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="mt-10 ml-5 mb-5">
            <img  src="assets/images/logo.png"  /></div>
                <hr>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" style="color:red">
                    {{ __("Você está autenticado como") }}<br>
                    <span style="font-weight: 600;color:black">{{ Auth()->user()->name }}</span>
                </div>
                <hr>
                <div class="p-6 text-gray-900" style="color:red">
                    {{ __("Atenção") }}<br>
                    <span style="font-weight: 600;color:black">Antes de efetuar qualquer marcação verifique primeiro os horários que já estão agendados pelos outros professores, só efetue a marcação com a certeza do horário livre no laboratório escolhido, atente-se para a diferença de horário entre as células.</span>
                </div>
                <hr>
                <div class="p-6 text-gray-900" style="color:red">
                    {{ __("Muito importante") }}<br>
                    <span style="font-weight: 600;color:black">Em caso de marcação errada somente o CPD pode excluir o horário agendado, então caso erre, por favor entre em contato com o CPD e solicite a exclusão - 36168160 (Wilson) ou 36168147 (Guilherme ou Kauane)</span>
            </div>
        </div>
    </div>
</x-app-layout>
