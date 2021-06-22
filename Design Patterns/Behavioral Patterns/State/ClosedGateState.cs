using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace State
{
    class ClosedGateState : IGateState
    {
        Gate gate;
        public ClosedGateState(Gate gate)
        {
            this.gate = gate;
        }
        public void enter()
        {
            Console.WriteLine("You cannot pass through the gate");
            this.gate.ChangeState(new ClosedGateState(this.gate));
        }

        public void pay()
        {
            Console.WriteLine("The gate is processing your pay.");
            this.gate.ChangeState(new ProcessingGateState(this.gate));
        }

        public void payfailed()
        {
            Console.WriteLine("payfailed!");
            this.gate.ChangeState(new ClosedGateState(this.gate));
        }

        public void payok()
        {
            Console.WriteLine("Pay has not finished processing");
            this.gate.ChangeState(new ClosedGateState(this.gate));
        }
    }
}
