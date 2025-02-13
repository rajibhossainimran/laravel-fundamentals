<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tailwind Table</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet"> -->
  @vite('resources/css/app.css')
</head>
<body>
  <div class="container mx-auto">
    <table class="min-w-full divide-y divide-gray-200">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact</th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">
        <tr>
          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">John Doe</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">john.doe@example.com</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">123-456-7890</td>
        </tr>
        <tr>
          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Jane Smith</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">jane.smith@example.com</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">098-765-4321</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
