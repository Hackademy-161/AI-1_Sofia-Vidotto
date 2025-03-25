<x-layout title="NAIROBI">

    <x-header />


    <div class="container-fluid">
        <div>
            <div class="row m-5">
                <div class="col-md-8 p-5">
                    <!-- prima row card -->
                    <div class="row">
                        <div class="col-12 py-3 d-flex flex-row align-items-center justify-content-between">
                            <h2 class="text-white">Upcoming Tournaments</h2>
                        </div>
                        @foreach ($games as $game)
                        <div class="col-md-4 my-3">
                            <div class="game-card">
                                <img src="{{Storage::url($game->img)}}" alt="Game Image">
                                <p class="date pt-4">{{ \Carbon\Carbon::parse($game->date)->translatedFormat('d F Y') }} at 6 AM</p>
                                <h6>{{$game->name}}</h6>
                                <div class="details py-4">
                                    <div>
                                        <p class="mb-0 text-warning">🏆 ${{$game->prize}}</p>
                                        <small>Prize</small>
                                    </div>
                                    <div>
                                        <p class="mb-0 text-danger">⚔ {{$game->team}}</p>
                                        <small>Team size</small>
                                    </div>
                                    <div>
                                        <p class="mb-0 text-info">🎮 {{$game->sponsor}}</p>
                                        <small>Sponsor</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="row">
                        <div class="col-12">
                            {{ $games->links() }}
                        </div>
                    </div>
                </div>


                <!-- Sidebar -->
                <div class="col-md-4">
                    <div class="card bg-dark-custom text-white-50">
                        <h2 class="text-white p-3"><span class="text-red">Team</span> Chat</h2>
                        <livewire:chat />
                    </div>
                    <div class="row">
                        <div class="col-12 ">
                            <img src="/images/video1.png" class="img-fluid my-5">
                        </div>
                        <div class="col-12">
                            <img src="/images/video2.png" class="img-fluid my-5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>