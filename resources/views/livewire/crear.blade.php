<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
	<div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

		<div class="fixed inset-0 transition-opacity">
			<div class="absolute inset-0 bg-gray-500 opacity-75">
				
			</div>
		</div> 

		<span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

		<div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="modal" aria-labelledby="modal-title">
			<form action="">
				<div class="bg-white px-4 pt-5 pb-4 sm:pb-4">

					<div class="mb-4">
						<label for="descripcion">Descripcion:</label>
						<input type="text" name="descripcion" class=" shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="descripcion" wire:model="descripcion">
					</div>
					<div class="mb-4">
						<label for="cantidad">Cantidad:</label>
						<input type="number" name="cantidad" class=" shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="descripcion" wire:model="cantidad">
					</div>

					<div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">

						<span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
							<button wire:click="cerrarModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-700 hover:border-red-200 hover:bg-red-900 text-black font-bold py-2 px-4 my-3">Cancelar</button>
						</span>

						<span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
							<button wire:click.prevent="guardar()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-purple-700 hover:border-purple-700 hover:bg-purple-900 text-black font-bold py-2 px-4 my-3">Guardar</button>
						</span>

						
						
					</div>

				</div>
			</form>
		</div>
	</div>
</div>