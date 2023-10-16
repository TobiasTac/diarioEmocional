<!-- create  -->

<div class="modalCreate">
  <div class="modalCreate-container">
    <div class="modalCreate-header">
      <h2> Criar Novo Diário &#43; </h2>
      <button class="modalCreateClose"> <i class='bx bxs-x-circle'></i> </button>
    </div>
    <div class="modalCreate-content">
      <h1> Título: </h1>
      <input type="text" placeholder="Escreva Aqui...">
      <h1> Conte Seu Dia: <h1>
          <textarea name="" id="" cols="30" rows="10" placeholder="Escreva Aqui..."></textarea>
    </div>
    <div class="modalCreate-footer">
      <button class="button"> Save </button>
      <button class="button delete"> Cancel </button>
    </div>
  </div>
</div>

<!-- read more -->

<div class="modalRead">
  <div class="modalRead-container">
    <div class="modalRead-header">
      <h2> Data de Criação: 22/03/2022 </h2>
      <button class="modalReadClose"> <i class='bx bxs-x-circle'></i> </button>
    </div>
    <div class="modalRead-content">
      <h1> Título: </h1>
      <input type="text" placeholder="Escreva Aqui..." value="$title">
      <h1> Conte Seu Dia: <h1>
          <textarea name="" id="" cols="30" rows="10" placeholder="Escreva Aqui..."> $cont </textarea>
    </div>
    <div class="modalRead-footer">
      <button class="button"> Edit </button>
      <button class="button delete"> Cancel </button>
    </div>
  </div>
</div>

<!-- filter -->

<div class="modalFilter">
  <div class="modalFilter-container">
    <div class="modalFilter-header">
      <h2> Filtros </h2>
      <button class="modalFilterClose"> <i class='bx bxs-x-circle'></i> </button>
    </div>
    <div class="modalFilter-content">
      <input type="radio" name="filter" value="date">
      <label for="html">Date</label><br>
      <input type="radio" name="filter" value="title">
      <label for="css">Title</label><br>
    </div>
    <div class="modalFilter-footer">
      <button class="button"> Save </button>
      <button class="button delete"> Cancel </button>
    </div>
  </div>
</div>

<!-- delete -->

<div class="modalDelete">
  <div class="modalDelete-container">
    <div class="modalDelete-header">
      <button class="modalDeleteClose"> <i class='bx bxs-x-circle'></i> </button>
    </div>
    <div class="modalDelete-content">
      <h1> Realmente Deseja Excluir? </h1>
    </div>
    <div class="modalDelete-footer">
      <button class="button delete"> Sim </button>
    </div>
  </div>
</div>