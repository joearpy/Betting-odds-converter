<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>QuickBetOnline</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#oddsConverter">Open Modal</button>
        <!-- Modal -->
        <div class="modal fade" id="oddsConverter" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-header-row-1 hidden-xs">
                            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times-circle-o" aria-hidden="true"></i></button>
                        </div>
                        <div class="clearfix"></div> 
                        <div class="modal-header-row-2 hidden-xs">
                            <img class="pull-left" src="img/cube.png" alt="cube">
                            <div class="clearfix"></div>
                        <h4 class="modal-title text-center">Enter the odds</h4>
                        </div>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">Please use valid format, for example: UK: 1/5, EU: 3.75, USA: +400</p>
                        <form id="converter" role="form" class="form">
                            <div class="row">
                                <div class="clearfix"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 col-lg-2 control-label">Your odds</label>
                                    <div class="col-sm-10 col-md-10 col-lg-10">
                                        <input id="user_odds" type="text" name="user_odds" class="form-control">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 col-lg-2 control-label">Odds type</label>
                                    <div class="col-sm-10 col-md-10 col-lg-10">
                                        <select id="user_odds_type" class="form-control">
                                            <option value="uk">UK</option>
                                            <option value="eu">EU</option>
                                            <option value="usa">USA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <button type="submit" class="btn btn-default">Convert!</button>
                                    </div>
                                </div> 
                            </div>
                        </form>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <button id="reset" class="btn btn-default">Reset!</button>
                                </div>
                            </div>   
                        </div>   
                        <div class="clearfix"></div> 
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">	 
                                <table id="result" class="table-responsive table hidden">
                                    <thead>
                                        <tr>
                                            <th>UK</th>
                                            <th>EU</th>
                                            <th>USA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>                            	  	
                            </div> 
                        </div>
                        <div class="clearfix"></div> 
                        <div class="error-container col-sm-12 col-md-12 col-lg-12 text-center">
                            <p id="result-error" class="hidden"></p>
                        </div>
                        <div class="clearfix"></div> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/form-validator.min.js"></script>
        <script type="text/javascript" src="js/converter-script.js"></script>
        <script type="text/javascript">
            $("#oddsConverter").modal();
        </script>
    </body>
</html>
