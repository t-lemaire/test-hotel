@extends('layouts.app')

@section('content')
    <div class="mb-12">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="https://via.placeholder.com/250x600?text=Test+Hotel" alt="Test Hotel Picture" />
            </div>
            <div class="col-md-8">
                <h5>Welcome to Test Hotel{{Auth::user()->name ? ' ' . Auth::user()->name : '' }}!</h5>
                <p>Vestibulum pellentesque porttitor elit vel hendrerit. Vestibulum laoreet diam augue, vel convallis neque vestibulum in. Vivamus malesuada ante sed lobortis euismod. Nunc lorem eros, sagittis vitae finibus id, feugiat eget massa. Praesent vitae quam nunc. Nam lobortis, nunc at tristique varius, neque arcu ullamcorper dolor, et fringilla neque metus at ipsum. Vestibulum pellentesque in purus sit amet rutrum. Cras auctor vel augue ac dictum.</p>
                <p>Nulla luctus lorem dolor, ut euismod nunc congue at. Quisque finibus ex eu sagittis dapibus. Mauris sagittis metus elementum ultrices pulvinar. Quisque rhoncus malesuada lobortis. Fusce turpis purus, bibendum et posuere nec, hendrerit ac eros. Phasellus aliquam massa ac nibh tincidunt lacinia. Donec eget magna venenatis, venenatis felis ac, semper ex. Nam tempus auctor dolor, pharetra tristique massa. Curabitur metus libero, ultricies eget fringilla sed, ullamcorper eget elit. Ut id semper mauris. Nullam pharetra non libero et fermentum. Aliquam ullamcorper molestie nibh et rhoncus.</p>
                <p>Ut purus elit, vestibulum at vestibulum vitae, tempor quis lacus. Nulla vehicula purus et mauris viverra, eu posuere quam interdum. Nullam fringilla orci a lacus facilisis rhoncus. Aliquam egestas placerat dapibus. In vitae commodo diam. Vivamus sollicitudin, odio eget cursus accumsan, erat lacus molestie tellus, in dictum sem purus in ipsum. Suspendisse suscipit sagittis lacinia. Etiam finibus finibus est, eget sodales arcu commodo at.</p>
                <p>Fusce feugiat, sapien non fringilla vehicula, odio mi sollicitudin tellus, a consequat tellus lectus sit amet orci. Proin efficitur quam eu dapibus viverra. Nunc ipsum turpis, hendrerit sit amet eros sodales, rhoncus blandit justo. Suspendisse potenti. Praesent dignissim, nibh luctus maximus laoreet, ligula lorem faucibus velit, sit amet semper nibh felis id velit. Ut a lobortis turpis. Duis vel justo a ligula vestibulum vestibulum. Vestibulum velit eros, volutpat ac eros a, hendrerit tempus elit. Aliquam elementum justo urna. Vivamus id facilisis magna. Nullam cursus viverra metus ut scelerisque. Duis et leo odio. Pellentesque at sodales augue. Suspendisse cursus a eros ac scelerisque. Sed mattis hendrerit orci ut faucibus.</p>
                <p>Cras sed risus eu erat tempus varius. Aliquam eu dignissim turpis. In quis arcu erat. Donec vel ante lorem. Nulla vehicula ac elit sit amet fringilla. Curabitur laoreet augue sit amet felis hendrerit commodo. Donec vulputate lacus diam, at tempus ex pellentesque eu. Cras massa est, vestibulum vitae blandit a, pellentesque et massa. Vestibulum maximus sagittis tellus nec fermentum.</p>
            </div>
        </div>
    </div>
@endsection
