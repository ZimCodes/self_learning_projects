using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Memento
{
    class Caretaker
    {
        string input;
        //The List of Mementos is the ONLY thing required for the Memento Pattern
        public List<Memento> mementos = new List<Memento>();
        SaveAction save = new SaveAction();
        public void Start()
        {
            while (true)
            {
                Console.WriteLine("What would you like to do?(create/set/restore)");
                input = Console.ReadLine();
                switch (input.ToLower())
                {
                    case "create":
                        mementos.Add(save.CreateMemento());
                        break;
                    case "set":
                        Console.WriteLine("Set the current state you want to save: (running/standing)");
                        input = Console.ReadLine();
                       
                        save.set((input.ToLower() == "running") ? State.Running:State.Standing);
                        break;
                    case "restore":
                        Console.WriteLine("Which momento would you like to restore?(zero # index)");
                        input = Console.ReadLine();
                        save.restoreMemento(mementos[Int32.Parse(input)]);
                        break;
                }
                Console.ReadKey();
                Console.Clear();
            }
        }
       
    }
}
