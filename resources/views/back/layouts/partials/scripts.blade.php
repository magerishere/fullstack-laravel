<!-- Essential javascripts for application to work-->
<script src="{{asset('back/assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('back/assets/js/popper.min.js')}}"></script>
<script src="{{asset('back/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('back/assets/js/main.js')}}"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="{{asset('back/assets/js/plugins/pace.min.js')}}"></script>
<!-- Page specific javascripts-->
<script type="text/javascript" src="{{asset('back/assets/js/plugins/chart.js')}}"></script>
<!-- Helper & Custom Js-->
<script type="text/javascript" src="{{asset('back/assets/js/helpers.js')}}"></script>
<script type="text/javascript" src="{{asset('back/assets/js/custom.js')}}"></script>
<script type="text/javascript" src="{{asset('back/assets/js/plugins/bootstrap-notify.min.js')}}"></script>
<script type="text/javascript" src="{{asset('back/assets/js/plugins/sweetalert.min.js')}}"></script>
<!-- Data table plugin-->
<script type="text/javascript" src="{{asset('back/assets/js/plugins/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('back/assets/js/plugins/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript">$('[data-table]').DataTable();</script>
@livewireScripts
@stack('scripts')
