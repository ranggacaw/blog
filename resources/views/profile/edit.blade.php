@extends('layouts.app')

@section('content')
<div class="form-widget">

    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <form action="{{ url('profile-edit-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- <div class="form-process">
                        <div class="css3-spinner">
                            <div class="css3-spinner-scaler"></div>
                        </div>
                    </div> --}}
                    <div class="col-12 form-group">
                        <label>Name:</label>
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                    </div>
                    <div class="col-12 form-group">
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                    </div>
                    <div class="col-12 form-group">
                        <label>Phone:</label>
                        <input type="text" name="phone" class="form-control" value="{{ $user->phone }}">
                    </div>
                    <div class="col-12 form-group">
                        <div class="form-group">
                            <label>Profile Picture:</label>
                            <input type="file"  name="profilePicture" class="file-loading form-select" />
                        </div>
                        <div class="form-group">
                            <label>Feeds:</label>
                            <textarea name="feeds" class="form-control" cols="30" rows="5">{{ $user->feeds }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Describe Yourself (About Me):</label>
                            <textarea name="about" class="form-control" cols="30" rows="10">{{ $user->about }}</textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-secondary">Save Profile</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-lg-6 ps-lg-5">
            <p><span class="dropcap">F</span>oster best practices effectiveness inspire breakthroughs solve immunize turmoil. Policy dialogue peaceful The Elders rural global support. Process inclusive innovate readiness, public sector complexity. Lifting people up cornerstone partner, technology working families civic engagement activist recognize potential global network. Countries tackling solution respond change-makers tackle. Assistance, giving; fight against malnutrition experience in the field lasting change scalable. Empowerment long-term, fairness policy community progress social responsibility; Cesar Chavez recognition. Expanding community ownership visionary indicator pursue these aspirations accessibility. Achieve; worldwide, life-saving initiative facilitate. New approaches, John Lennon humanitarian relief fundraise vaccine Jane Jacobs community health workers Oxfam. Our ambitions informal economies.</p>

            <blockquote class="topmargin bottommargin">
                <p>Human rights healthcare immunize; advancement grantees. Medical supplies; meaningful, truth technology catalytic effect. Promising development capacity building international enable poverty.</p>
            </blockquote>

            <div class="w-100">
                <p>Provide, Aga Khan, interconnectivity governance fairness replicable, new approaches visionary implementation. End hunger evolution, future promising development youth. Public sector, small-scale farmers; harness facilitate gender. Contribution dedicated global change movements, prosperity accelerate progress citizens of change. Elevate; accelerate reduce child mortality; billionaire philanthropy fluctuation, plumpy'nut care opportunity catalyze. Partner deep.</p>
            </div>

            <div class="w-100">
                <p>Frontline harness criteria governance freedom contribution. Campaign Angelina Jolie natural resources, Rockefeller peaceful philanthropy human potential. Justice; outcomes reduce carbon emissions nonviolent resistance human being. Solve innovate aid communities; benefit truth rural development UNICEF meaningful work. Generosity Action Against Hunger relief; many voices impact crisis situation poverty pride. Vaccine carbon.</p>
            </div>

        </div>
    </div>

</div>
@endsection