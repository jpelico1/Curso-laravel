@if (session("mensaje"))

<div class="alert alert-success alert-dismissible" data-auto-dismiss='5000'>
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
    <h4><i class="icon fa fa-check"> Mensaje</i></h4>
    <ul>
        <li>
            {{session("mensaje")}}
        </li>
    </ul>
</div>
@endif
