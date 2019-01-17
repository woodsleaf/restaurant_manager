# restaurant_manager

- В вашем ресторане некоторое количество столов на разное количество человек (2, 3, 4, 5, 6).

- Клиенты приходят по одному или группами до 6 человек.

- Клиенты из группы должны должны поместиться за один стол,
  поэтому вы должны поместить их за соответствующий стол.

- Если нет свободных столов с требуемым количеством мест, группа должна ждать в очереди.

- Сев за стол группа не может его поменять.

- Группы клиентов должны обслуживаться в порядке поступления с исключением:
  если есть места для меньшей групппы, которая пришла позже.

- Группы могут делить один стол, однако если в то же время у вас есть свободный стол
  с требуемым количеством мест, то нужно посадить клиентов за него.

- Конечно полагаем, что группа может устать ждать свои места и уйти из очереди.

Заполните RestManager класс подходящими структурами и реализуйте его конструктор с тремя методами.
Вы можете изменить другие классы и добавить новые методы на ваше усмотрение.

```
public class Table
{
   public final int size; // number of chairs
}

public class ClientsGroup
{
   public final int size; // number of clients
}

public class RestManager
{
   public RestManager (List<Table> tables)
   {
      // TODO
   }

   // new client(s) show up
   public void onArrive (ClientsGroup group)
   {
      // TODO
   }

   // client(s) leave, either served or simply abandoning the queue
   public void onLeave (ClientsGroup group)
   {
      // TODO
   }

   // return table where a given client group is seated,
   // or null if it is still queuing or has already left
   public Table lookup (ClientsGroup group)
   {
      // TODO
   }
}
```
