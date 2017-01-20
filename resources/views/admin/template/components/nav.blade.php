<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>

<nav class="teal darken-1">
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo center">Case-U</a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{route('requirements.index')}}">Requiremients</a></li>
        <li><a href="badges.html">Functionalities</a></li>
        <!-- Dropdown Trigger -->
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>

    <ul class="side-nav" id="mobile-demo">
      <li><a href={{'route(requirements.index)'}}>Requiremients</a></li>
      <li><a href="badges.html">Functionalities</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>
