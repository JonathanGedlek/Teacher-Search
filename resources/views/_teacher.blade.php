<div class = "bg-green-200   mb-4 px-4 py4 border rounded border-grey-500 h-20">
    <div class="flex justify-between">
        <div class=" my-auto">
            <div class="text-x1 font-bold mb-2">
                {{$t -> title}} {{$t->name}}
            </div>
            <div class="place-self-end">
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold p-1 rounded" type="button" onclick="window.location='{{url("teachers/".$t->id."/edit")}}'">
                    Edit
                </button>

                <button class="bg-green-500 hover:bg-green-700 text-white font-bold p-1 rounded" type="button" onclick="window.location='{{url("teachers/".$t->id)}}'">
                    Details
                </button>
            </div>
        </div>
        <div>
            <img src="{{ asset ('images/logo-hirez.png') }}" alt="Broadworth logo" width="70">
        </div>
    </div>
</div>
