<h3>vorhandene Slider</h3>

<form action="{$form_url}" method="post" role="form">

    <div class="row">
        <div class="col-sm-6">
            <button class="btn btn-primary" type="submit">Status speichern</button>
        </div>
        <div class="col-sm-6 text-right">
            <a class="btn btn-primary" href="{$new_link}">neuer Slider</a>
        </div>
    </div><br>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>hinzugef&uuml;gt</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {foreach item=s from=$sliders}
            <tr>
                <td>{$s.id}</td>
                <td>{$s.name}</td>
                <td>{$s.date}</td>
                <td class="text-right">
                    <div class="btn-group">
                        <a data-toggle="tooltip" data-placement="top" title="Status ändern" class="btn btn-sm {if $s.status == 1}btn-success{else}btn-warning{/if}" href="{$s.status_link}">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Slider löschen" class="btn btn-sm btn-danger" href="{$s.delete_link}">
                            <i class="fa fa-trash-o"></i>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Slider und Layer bearbeiten" class="btn btn-sm btn-primary" href="{$s.edit_link}">
                            <i class="fa fa-wrench"></i>
                        </a>
                    </div>
                </td>
            </tr>
            {foreachelse}
            <tr>
                <td class="text-center" colspan="4">
                    <em><small>derzeit ist noch kein Slider vorhanden</small></em>
                </td>
            </tr>
            {/foreach}
        </tbody>
    </table>
</form>