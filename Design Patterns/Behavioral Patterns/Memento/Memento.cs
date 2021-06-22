using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Memento
{
    class Memento
    {
        public State State { get; private set; }

        public Memento(State state)
        {
            State = state;
        }
    }
}
