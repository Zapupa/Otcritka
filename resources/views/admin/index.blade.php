<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Заявки') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
          <div class="sm:rounded-lg mt-5 relative overflow-x-auto">
            <table class="sm:rounded-lg w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
              <thead class="rounded-md text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                  <th scope="col" class="px-6 py-3">
                    ФИО
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Класс
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Школа
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Название работы
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Категория
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Изображение
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Очки
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($works as $work)
              <tr class="bg-white border-b border-gray-200">
                <td class="px-6 py-4">
                {{ $work->user->lastname }}
                {{ $work->user->name }}
                {{ $work->user->middlename }}
                </td>
                <td class="px-6 py-4">
                {{ $work->user->class }}
                </td>
                <td class="px-6 py-4">
                {{ $work->user->school }}
                </td>
                <td class="px-6 py-4">
                {{ $work->title }}
                </td>
                <td class="px-6 py-4">
                {{ $work->category->title }}
                </td>
                <td>
                @isset($work->path_img)
            <img src="/images/{{$work->path_img}}" class="contact-block__img" alt="{{$work->path_img}}">
            @endisset
                </td>
                <td class="px-6 py-4">
                @if($work->score == 0)
            <form class=" w-full p-5" id="form-update-{{$work->id}}" action="{{route('work.update')}}"
              method="POST">
              @csrf
              @method('PATCH')
              <input type="hidden" name="id" value="{{$work->id}}">
              <div class="mt-4">
              <x-text-input id="score" class="block mt-1 w-full" type="number" name="score"
              :value="old('score')" required autocomplete="score" />
              </div>
              <x-primary-button class="ms-4">
              {{ __('Оценить') }}
              </x-primary-button>
            </form>
            @else
            <p class=" w-full p-5">{{ $work->score }}</p>
            @endif

                </td>

              </tr>
        @endforeach
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>