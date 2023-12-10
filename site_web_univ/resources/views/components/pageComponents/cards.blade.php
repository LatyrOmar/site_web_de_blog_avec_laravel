<div class="row m-5">

    <div class="col-8">
        <h2>LAST ITEM</h2>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://www.seneplus.com/sites/default/files/styles/section_hero/public/raw_photos/juin_2021.jpg?itok=GtsIlgrI" class="img-fluid rounded-start h-100 " alt="...">
                </div>
                <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Décision Cour Suprême:</h5>
                        <p class="card-text"> La F24 invite les Sénégalais à la mobilisation pour une election libre et transparente.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://media.istockphoto.com/id/1355687112/photo/various-sport-equipment-gear.jpg?s=612x612&w=0&k=20&c=JOizKZg68gs_7lxjM3YLrngeS-7dGhBXL8b-wDBrYUE=" class="img-fluid rounded-start h-100" alt="...">
                </div>
                <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Eliminatoir Mondial-2026 Zone Afrique:</h5>
                        <p class="card-text">La Guinée Equatorial et la Guinée Bissau dans le Tempo, la Gambie trebuche a nouveau </p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://cdn.unitycms.io/images/FpITxJdvaf_8pHfFQnA5cw.jpg?op=ocroped&val=1200,1200,1000,1000,0,0&sum=yYSpRFkx6vE" class="img-fluid rounded-start h-100" alt="...">
                </div>
                <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Bagarre générale à l'aube: un chauffard fonce sur les gens</h5>
                        <p class="card-text">Une sortie de boîte du centre-ville qui tourne très mal. C’était ce jeudi à 6h du matin devant l’École de culture générale Ella-Maillart. La Brigade criminelle lance un appel à témoins.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <h2>ITEM CATEGORY </h2>
        <ol class="list-group list-group-numbered">
            @foreach($categories as $categorie)
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                    <div class="fw-bold">{{$categorie->name}}</div>
                    </div>
                    <span class="badge bg-primary rounded-pill">14</span>
                </li>
            @endforeach

          </ol>
    </div>
 </div>
