using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Command
{
    class Program
    {
        static void Main(string[] args)
        {
            Light light = new Light();
            RemoteController remote;
            remote = new RemoteController(new ChangeColorCommand(light));
            while (true)
            {
                remote.ExecuteCommand();
                Console.ReadKey();
                Console.Clear();

                remote.UnExecuteCommand();
                Console.ReadKey();
                Console.Clear();

            }
            
        }
    }
}
