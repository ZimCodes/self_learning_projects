using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace State
{
    class OpenGateState : IGateState
    {
        Gate gate;
        public OpenGateState(Gate gate)
        {
            this.gate = gate;
        }
        public void enter()
        {
            Console.WriteLine("You pass through the gate.");
            this.gate.ChangeState(new ClosedGateState(this.gate));
            Console.WriteLine("The gate close behind you.");
        }

        public void pay()
        {
            Console.WriteLine("Gate has been paid");
            this.gate.ChangeState(this);
            Console.WriteLine("Pay is being processed.");
        }

        public void payfailed()
        {
            this.gate.ChangeState(this);
            Console.WriteLine("Your payment has failed! The gate is still closed.");
        }

        public void payok()
        {
            Console.WriteLine("Gate opens.");
            this.gate.ChangeState(this);
        }
    }
}
