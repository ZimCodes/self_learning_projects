using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Memento
{
    enum State {Running, Standing}
    class SaveAction
    {
        private State State;

        public void set(State state)
        {
            State = state;
            Console.WriteLine("Originator: Setting state to "+state);
        }
        public Memento CreateMemento()
        {
            Console.WriteLine("Originator: Saving to Memento.");
            return new Memento(State);
        }
        public void restoreMemento(Memento m)
        {
            State = m.State;
            Console.WriteLine("Originator: This Restored State from memento is "+ State);
        }
        
    }
}
