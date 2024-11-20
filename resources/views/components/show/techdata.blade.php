<div class="grid mt-4 techData sm:grid-cols-12">
    <div class="grid col-span-8 px-4 mt-2 border border-b-4 rounded-sm borderBox sm:grid-cols-12">
        <span class="w-[300px] ml-4 mt-2 mb-2 text-2xl Title">
            Технически данни
        </span>
        <br>
        <div class="borderBox grid bg-slate-100  sm:grid-cols-12  mt-2 rounded-sm   col-span-12 h-[40px]">


            <div class=" rounded-sm  col-span-6  h-[40px] gap-1">
                <div class="flex items-center sm:grid-cols-12">

                    <div>
                        <div class="grid col-span-12 mt-2 ml-4 text-sm font-medium ">Дата на производство
                        </div>

                    </div>
                </div>

            </div>
            <div class=" rounded-sm  col-span-6  h-[40px] gap-1">
                <div class="flex items-center sm:grid-cols-12">

                    <div>
                        <div class="grid col-span-12 mt-2 ml-4 font-bold text-m ">{{ $car->car_km}} .км
                        </div>

                    </div>
                </div>

            </div>

        </div>

        <div class="grid  sm:grid-cols-12  rounded-sm    col-span-12 h-[40px]">

            <div class="  rounded-sm  col-span-6  h-[40px] gap-1">
                <div class="flex items-center sm:grid-cols-12">

                    <div>
                        <div class="grid col-span-12 mt-2 ml-4 text-sm font-medium ">Двигател
                        </div>

                    </div>
                </div>

            </div>
            <div class=" rounded-sm  col-span-6  h-[40px] gap-1">
                <div class="flex items-center sm:grid-cols-12">

                    <div>
                        <div class="grid col-span-12 mt-2 ml-4 font-bold text-m ">{{
                            $car->carEngine->engine_name}}
                        </div>

                    </div>
                </div>

            </div>

        </div>

        <div class="borderBox grid bg-slate-100  sm:grid-cols-12  mt-2 rounded-sm   col-span-12 h-[40px]">


            <div class=" rounded-sm  col-span-6  h-[40px] gap-1">
                <div class="flex items-center sm:grid-cols-12">

                    <div>
                        <div class="grid col-span-12 mt-2 ml-4 text-sm font-medium ">Мощност
                        </div>

                    </div>
                </div>

            </div>
            <div class=" rounded-sm  col-span-6  h-[40px] gap-1">
                <div class="flex items-center sm:grid-cols-12">

                    <div>
                        <div class="grid col-span-12 mt-2 ml-4 font-bold text-m ">{{ $car->car_hp}} .кс
                        </div>

                    </div>
                </div>

            </div>

        </div>

        <div class="grid  sm:grid-cols-12  rounded-sm    col-span-12 h-[40px]">

            <div class="  rounded-sm  col-span-6  h-[40px] gap-1">
                <div class="flex items-center sm:grid-cols-12">

                    <div>
                        <div class="grid col-span-12 mt-2 ml-4 text-sm font-medium ">Евростандарт
                        </div>

                    </div>
                </div>

            </div>
            <div class=" rounded-sm  col-span-6  h-[40px] gap-1">
                <div class="flex items-center sm:grid-cols-12">

                    <div>
                        <div class="grid col-span-12 mt-2 ml-4 font-bold text-m ">{{
                            $car->carEngine->engine_name}}
                        </div>

                    </div>
                </div>

            </div>

        </div>

        <div class="borderBox grid bg-slate-100  sm:grid-cols-12  mt-2 rounded-sm   col-span-12 h-[40px]">


            <div class=" rounded-sm  col-span-6  h-[40px] gap-1">
                <div class="flex items-center sm:grid-cols-12">

                    <div>
                        <div class="grid col-span-12 mt-2 ml-4 text-sm font-medium ">Кубатура [куб.см]
                        </div>

                    </div>
                </div>

            </div>
            <div class=" rounded-sm  col-span-6  h-[40px] gap-1">
                <div class="flex items-center sm:grid-cols-12">

                    <div>
                        <div class="grid col-span-12 mt-2 ml-4 font-bold text-m ">{{ $car->car_version}}
                        </div>

                    </div>
                </div>

            </div>

        </div>

        <div class="grid  sm:grid-cols-12  rounded-sm    col-span-12 h-[40px]">

            <div class="  rounded-sm  col-span-6  h-[40px] gap-1">
                <div class="flex items-center sm:grid-cols-12">

                    <div>
                        <div class="grid col-span-12 mt-2 ml-4 text-sm font-medium ">Скоростна кутия
                        </div>

                    </div>
                </div>

            </div>
            <div class=" rounded-sm  col-span-6  h-[40px] gap-1">
                <div class="flex items-center sm:grid-cols-12">

                    <div>
                        <div class="grid col-span-12 mt-2 ml-4 font-bold text-m ">{{
                            $car->car_version}}
                        </div>

                    </div>
                </div>

            </div>

        </div>

        <div class="borderBox grid bg-slate-100  sm:grid-cols-12  mt-2 rounded-sm   col-span-12 h-[40px]">


            <div class=" rounded-sm  col-span-6  h-[40px] gap-1">
                <div class="flex items-center sm:grid-cols-12">

                    <div>
                        <div class="grid col-span-12 mt-2 ml-4 text-sm font-medium ">Категория
                        </div>

                    </div>
                </div>

            </div>
            <div class=" rounded-sm  col-span-6  h-[40px] gap-1">
                <div class="flex items-center sm:grid-cols-12">

                    <div>
                        <div class="grid col-span-12 mt-2 ml-4 font-bold text-m ">Седан
                        </div>

                    </div>
                </div>

            </div>

        </div>

        <div class="grid  sm:grid-cols-12  rounded-sm    col-span-12 h-[40px]">

            <div class="  rounded-sm  col-span-6  h-[40px] gap-1">
                <div class="flex items-center sm:grid-cols-12">

                    <div>
                        <div class="grid col-span-12 mt-2 ml-4 text-sm font-medium ">Пробег [км]
                        </div>

                    </div>
                </div>

            </div>
            <div class=" rounded-sm  col-span-6  h-[40px] gap-1">
                <div class="flex items-center sm:grid-cols-12">

                    <div>
                        <div class="grid col-span-12 mt-2 ml-4 font-bold text-m ">{{
                            $car->car_km}} км
                        </div>

                    </div>
                </div>

            </div>

        </div>

        <div class="borderBox grid mb-4 bg-slate-100  sm:grid-cols-12  mt-2 rounded-sm   col-span-12 h-[40px]">


            <div class=" rounded-sm  col-span-6  h-[40px] gap-1">
                <div class="flex items-center sm:grid-cols-12">

                    <div>
                        <div class="grid col-span-12 mt-2 ml-4 text-sm font-medium ">Цвят
                        </div>

                    </div>
                </div>

            </div>
            <div class=" rounded-sm  col-span-6  h-[40px] gap-1">
                <div class="flex items-center sm:grid-cols-12">

                    <div>
                        <div class="grid col-span-12 mt-2 ml-4 font-bold text-m ">Цвят
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>