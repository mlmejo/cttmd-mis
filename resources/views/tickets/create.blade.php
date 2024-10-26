<x-app-layout>
  <div class="py-6">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="bg-white py-4 shadow-md sm:rounded-lg">
        <h2 class="px-4 text-lg font-medium uppercase leading-tight text-gray-800">Ticket Form</h2>

        <form action="{{ route('tickets.store') }}"
              method="post"
              class="grid gap-4 px-0 sm:px-4 md:grid-cols-2">
          <div>
            @csrf

            <h3 class="mt-4 bg-san-marino-600 px-4 py-3 font-medium leading-tight text-white sm:rounded-t-md">
              Ticket Information
            </h3>

            <div class="grid gap-4 border border-gray-300 p-4 shadow-sm sm:rounded-b-md md:grid-cols-2">
              <div class="md:col-span-2">
                <x-input-label for="ticket_number">Ticket Number</x-input-label>
                <x-text-input id="ticket_number"
                              class="mt-1 block w-full"
                              name="ticket_number"
                              required />
              </div>

              <div class="md:col-span-2">
                <x-input-label for="apprehended_at">Apprehension Date</x-input-label>
                <x-text-input type="datetime-local"
                              id="apprehended_at"
                              class="mt-1 block w-full"
                              name="apprehended_at" />
              </div>

              <div class="md:col-span-2">
                <x-input-label for="geographical_location">Geographical Location</x-input-label>
                <x-text-input id="geographical_location"
                              class="mt-1 block w-full"
                              name="geographical_location" />
              </div>

              <div class="md:col-span-2">
                <x-input-label for="barangay_apprehension">Barangay Apprehension</x-input-label>
                <x-text-input id="barangay_apprehension"
                              class="mt-1 block w-full"
                              name="barangay_apprehension" />
              </div>

              <div class="md:col-span-2">
                <x-input-label for="violation">Violation</x-input-label>
                <x-text-input id="violation"
                              class="mt-1 block w-full"
                              name="violation" />
              </div>

              <div class="md:col-span-2">
                <x-input-label for="details">Details</x-input-label>
                <x-textarea id="details"
                            class="mt-1 block w-full"
                            name="details" />
              </div>

              <div class="md:col-span-2">
                <x-input-label for="apprehended_by">Traffic Enforcer Assigned</x-input-label>
                <x-text-input id="apprehended_by"
                              class="mt-1 block w-full"
                              name="apprehended_by"
                              required />
              </div>

              <div>
                <x-input-label for="due_at">Due Date</x-input-label>
                <x-text-input type="date"
                              id="due_at"
                              class="mt-1 block w-full"
                              name="due_at"
                              required />
              </div>

              <div>
                <x-input-label for="total_amount">Total Amount</x-input-label>
                <x-text-input type="number"
                              id="total_amount"
                              class="mt-1 block w-full"
                              name="total_amount"
                              required />
              </div>
            </div>

            <p class="mt-6 text-gray-900">Validated By:</p>
          </div>

          <div>
            <h3 class="mt-4 bg-san-marino-600 px-4 py-3 font-medium leading-tight text-white sm:rounded-t-md">
              Violator Information
            </h3>

            <div class="grid gap-4 border border-gray-300 p-4 shadow-sm sm:rounded-b-md md:grid-cols-2">
              <div>
                <x-input-label for="first_name">First Name</x-input-label>
                <x-text-input id="first_name"
                              class="mt-1 block w-full"
                              name="first_name"
                              required />
              </div>

              <div>
                <x-input-label for="middle_name">Middle Name</x-input-label>
                <x-text-input id="middle_name"
                              class="mt-1 block w-full"
                              name="middle_name" />
              </div>

              <div>
                <x-input-label for="last_name">Last Name</x-input-label>
                <x-text-input id="last_name"
                              class="mt-1 block w-full"
                              name="last_name"
                              required />
              </div>

              <div>
                <x-input-label for="extension_name">Extension Name</x-input-label>
                <x-text-input id="extension_name"
                              class="mt-1 block w-full"
                              name="extension_name" />
              </div>

              <div class="md:col-span-2">
                <x-input-label for="street_number">Street/House No.</x-input-label>
                <x-text-input id="street_number"
                              class="mt-1 block w-full"
                              name="street_number" />
              </div>

              <div class="md:col-span-2">
                <x-input-label for="barangay">Barangay</x-input-label>
                <x-text-input id="barangay"
                              class="mt-1 block w-full"
                              name="barangay" />
              </div>

              <div class="md:col-span-2">
                <x-input-label for="city">City</x-input-label>
                <x-text-input id="city"
                              class="mt-1 block w-full"
                              name="city" />
              </div>

              <div class="md:col-span-2">
                <x-input-label for="gender">Gender</x-input-label>
                <x-select-input id="gender"
                                class="mt-1 block w-full"
                                name="gender">
                  <option value="">Select an option</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </x-select-input>
              </div>

              <div class="md:col-span-2">
                <x-input-label for="license_number">License Number</x-input-label>
                <div class="flex items-center">
                  <x-text-input id="license_number"
                                class="mt-1 block w-full"
                                name="license_number" />
                  <x-primary-button class="ms-3">Validate</x-primary-button>
                </div>
              </div>

              <div class="md:col-span-2">
                <x-input-label for="vehicle_type">Vehicle Type</x-input-label>
                <x-text-input id="vehicle_type"
                              class="mt-1 block w-full"
                              name="vehicle_type" />
              </div>

              <div class="md:col-span-2">
                <x-input-label for="vehicle_description">Vehicle Description</x-input-label>
                <x-text-input id="vehicle_description"
                              class="mt-1 block w-full"
                              name="vehicle_description" />
              </div>

              <div class="md:col-span-2">
                <x-input-label for="vehicle_color">Vehicle Color</x-input-label>
                <x-text-input id="vehicle_color"
                              class="mt-1 block w-full"
                              name="vehicle_color" />
              </div>

              <div class="md:col-span-2">
                <x-input-label for="plate_number">Plate Number</x-input-label>
                <x-text-input id="plate_number"
                              class="mt-1 block w-full"
                              name="plate_number" />
              </div>

              <div class="md:col-span-2">
                <x-input-label for="plate_number">Plate Number</x-input-label>
                <div class="flex items-center">
                  <x-text-input id="plate_number"
                                class="mt-1 block w-full"
                                name="plate_number" />
                  <x-primary-button class="ms-3">Validate</x-primary-button>
                </div>
              </div>
            </div>

            <div class="mt-6 flex items-center justify-end px-4 sm:px-0">
              <a href="{{ route('tickets.index') }}"
                 class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-widest text-gray-700 shadow-sm transition duration-150 ease-in-out hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Cancel
              </a>

              <x-primary-button class="ms-3">
                Submit
              </x-primary-button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>
