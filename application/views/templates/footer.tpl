<!--footer starts from here-->
<div class="footer">
Aplikacja wykonana przez Michała Andrzejewskiego &copy; 2018-2019
</div>
<!--</footer>-->
<script src={base_url('/resources/js/external/jquery-3.3.1.min.js')}></script>
<script src={base_url('/resources/js/external/jquery-ui.min.js')}></script>
<script src={base_url('/resources/js/external/bootstrap.js')}> </script>
<script src={base_url('/resources/js/external/datatables.min.js')}> </script>
<script src={base_url('/resources/js/external/moment.min.js')}> </script>
<script src={base_url('/resources/js/external/bootstrap-datetimepicker.js')}> </script>
<script src={base_url('/resources/js/external/sweetalert2.all.min.js')}></script>
<script src={base_url('/resources/js/header.js')}></script>
<script src={base_url('/resources//fullcalendar/fullcalendar.min.js')}></script>
<script src={base_url('/resources/fullcalendar/locale/pl.js')}></script>
<script src={base_url('/resources/js/calendar.js')}></script>
<script src={base_url('/resources/fullcalendar/gcal.js')}></script>
<script src={base_url('/resources/js/select2.min.js')}></script>
<script src={base_url('/resources/fontawesome/js/brands.js')}></script>
<script src={base_url('/resources/fontawesome/js/solid.js')}></script>
<script src={base_url('/resources/fontawesome/js/fontawesome.js')}></script>


{if isset($customScripts)}
	{foreach $customScripts as $script}
    <script src="{base_url()}resources/js/{$script}.js"></script>
	{/foreach}
{/if}

</body>
</html>
