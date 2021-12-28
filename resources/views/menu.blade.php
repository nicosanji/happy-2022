@extends("layouts.default")

@section('page_title', 'MENU Capodanno')

@section('content')
    <div id="menu">
        <div class="container py-3">
            {{-- link --}}
            <div class="d-flex justify-content-between">
                <a class="rounded-circle d-flex justify-content-center align-items-center" href="/"><i
                        class="fas fa-home"></i></a>
                <a class="rounded-circle d-flex justify-content-center align-items-center" href="drinks"><i
                        class="fas fa-glass-cheers"></i></a>
            </div>
            <ul class="mb-0 ps-0">
                {{-- antipasti --}}
                <li class="fw-bold fs-1 py-2">Antipasti</li>
                <li class="d-flex flex-column align-items-center py-1">Insalata di Polipo con Patate e
                    Prezzemolo
                    <img src="https://primochef.it/wp-content/uploads/2018/05/SH_insalata_polpo_patate.jpg" alt="polipo"
                        class="rounded-circle p-2">
                </li>
                <li class="d-flex flex-column align-items-center py-1">Tagliata di Seppia con Sedano e Carote
                    <img src="https://giulianekorkina.com/wp-content/uploads/2020/06/DSC_9865-1024x685.jpg" alt="seppia"
                        class="rounded-circle p-2">
                </li>
                <li class="d-flex flex-column align-items-center py-1">Carpaccio di Pesce Spada agli Agrumi
                    <img src="https://uncutrecipes.com/Images-Recipes-Italian/Swordfish-Carpaccio-with-Green-and-Pink-Peppercorn.jpg"
                        alt="spada" class="rounded-circle p-2">
                </li>
                <li class="d-flex flex-column align-items-center py-1">Prosciutto Crudo di Parma con Melone
                    Bianco
                    <img src="https://image.jimcdn.com/app/cms/image/transf/none/path/se98d46a184fc5fd9/image/i5d3965dab3926292/version/1441987671/image.jpg"
                        alt="prosciutto" class="rounded-circle p-2">
                </li>
                {{-- primi --}}
                <li class="fw-bold fs-1 py-2">Primi Piatti</li>
                <li class="d-flex flex-column align-items-center py-1">Ravioli Speck e Radicchio con Crema ai
                    Funghi
                    <img src="https://www.versilfood.com/wp-content/uploads/2019/12/Ravioli-con-Crema-ai-funghi-Porcini-e-aroma-di-Tartufo-450x315.jpg"
                        alt="ravioli" class="rounded-circle p-2">
                </li>
                <li class="d-flex flex-column align-items-center py-1">Risotto Rana Pescatrice e Vongole con
                    Crema al Pistacchio
                    <img src="https://cdn.mytaste.org/i?u=group2%2FM00%2F35%2FB5%2FCgAIN1hENumAZw-ZADX_-glPilQ902.jpg&w=640"
                        alt="risotto" class="rounded-circle p-2">
                </li>
                <li class="d-flex flex-column align-items-center py-3">Sorbetto
                    <img src="https://blog.giallozafferano.it/dulcisinforno/wp-content/uploads/2018/12/Sorbetto-al-limone-cremoso-in-5-minuti-senza-gelatiera-6447.jpg"
                        alt="sorbetto" class="rounded-circle p-2">
                </li>
                {{-- secondi --}}
                <li class="fw-bold fs-1 py-2">Secondi Piatti
                </li>
                <li class="d-flex flex-column align-items-center py-1">Tagliata di Manzo con Funghi Porcini
                    <img src="https://www.donnamoderna.com/content/uploads/2004/10/tagliata-di-manzo-ai-porcini-ricetta-1200x630.jpg"
                        alt="tagliata" class="rounded-circle p-2">
                </li>
                <li class="d-flex flex-column align-items-center py-1">Gamberoni al Forno con Frutti di Bosco
                    <img src="https://www.granapadano.it/public/img/ricetta-36065.jpg" alt="gamberoni"
                        class="rounded-circle p-2">
                </li>
                <li class="d-flex flex-column align-items-center py-3">Torta Red Velvet
                    <img src="https://www.fiordipistacchio.it/wp-content/uploads/2019/10/redvelvet2.jpg" alt="torta"
                        class="rounded-circle p-2">
                </li>
                <li class="d-flex flex-column align-items-center py-3">Caffè e Digestivo
                    <img src="https://www.caffeblabla.it/wp-content/uploads/2018/09/caffe-grappa.jpg" alt="caffè"
                        class="rounded-circle p-2">
                </li>
            </ul>
        </div>
    </div>
@endsection
