<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.1.2/mustache.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://use.fontawesome.com/7e5ff2d272.js"></script>

<link rel="stylesheet" type="text/css" href="style.css" />

<div class="col col-md-4 col-md-offset-4">
    <!-- Stats module -->
    <div class="panel panel-default">
        <div class="panel-heading">Stats</div>
        <div id="statsModule" class="panel-body"></div>
    </div>
    <script id="stats-template" type="text/template">
        <strong>people: </strong>{{people}}
    </script>
    <!-- END Stats module -->

    <!-- People module -->
    <div class="panel panel-primary">
        <div class="panel-heading">People</div>
        <div id="peopleModule" class="panel-body">
            <input placeholder="name" type="text" class="form-control">
            <button id="addPerson" class="btn btn-primary btn-block">Add Person</button>
            <div class="col col-md-4 col-md-offset-4">
                <table id="people" class="table col-md-4" style="text-align: center">
                    <script id="people-template" type="text/template">
                        {{#people}}
                            <tr>
                                <td><span>{{.}}</span></td>
                                <td><i class="del fa fa-times fa-4" style="cursor: pointer"></i></td>
                            </tr>
                        {{/people}}
                    </script>
                </table>
                </div>
        </div> 
    </div>
    <!-- END People module -->

    <!-- Log module -->
    <div class="panel panel-danger">
        <div class="panel-heading">Log</div>
        <div id="logModule" class="panel-body">
            <ul>
                <script id="log-template" type="text/template">
                    {{#log}}
                    <li>
                        {{.}}
                    </li>
                    {{/log}}
                </script>
            </ul>
        </div>
    </div>
    <!-- END Log module -->


</div>


<script type="text/javascript" src="pubsub.js"></script>
<script type="text/javascript" src="stats.js"></script>
<script type="text/javascript" src="log.js"></script>
<script type="text/javascript" src="people.js"></script>