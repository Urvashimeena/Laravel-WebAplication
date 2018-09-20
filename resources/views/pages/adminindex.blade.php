<?php
$name=Session::get('islog');
$value=Session::get('islog1');
?>
@if($name==true)
@extends('layout.MasterAdminIndex')
@else

<script type="text/javascript">
    window.location="{{URL::to('/Admin_login')}}";
</script>
@endif
